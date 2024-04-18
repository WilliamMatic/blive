import React, { useCallback, useEffect, useState } from "react";
import {
  Text,
  View,
  StyleSheet,
  KeyboardAvoidingView,
  SafeAreaView,
  StatusBar,
  Image,
  TextInput,
  TouchableOpacity,
} from "react-native";
import Entypo from "@expo/vector-icons/Entypo";
import * as SplashScreen from "expo-splash-screen";
import * as Font from "expo-font";

SplashScreen.preventAutoHideAsync();

import {
  useFonts,
    Outfit_100Thin,
    Outfit_200ExtraLight,
    Outfit_300Light,
    Outfit_400Regular,
    Outfit_500Medium,
    Outfit_600SemiBold,
    Outfit_700Bold,
    Outfit_800ExtraBold,
    Outfit_900Black,
} from "@expo-google-fonts/outfit";



import { createBottomTabNavigator } from "@react-navigation/bottom-tabs";
import LiveScreen from "./Live";
import TarifScreen from "./Tarif";
import CompteScreen from "./Compte";

const Tab = createBottomTabNavigator();

export default function Home({ navigation, route }) {
  let [fontsLoaded] = useFonts({
    Outfit_100Thin,
    Outfit_200ExtraLight,
    Outfit_300Light,
    Outfit_400Regular,
    Outfit_500Medium,
    Outfit_600SemiBold,
    Outfit_700Bold,
    Outfit_800ExtraBold,
    Outfit_900Black,
  });

  const [appIsReady, setAppIsReady] = useState(false);

  useEffect(() => {
    async function prepare() {
      try {
        await Font.loadAsync(Entypo.font);
        await new Promise((resolve) => setTimeout(resolve, 100));
      } catch (e) {
        console.warn(e);
      } finally {
        setAppIsReady(true);
      }
    }

    prepare(); 
  }, []);

  const onLayoutRootView = useCallback(async () => {
    if (appIsReady) {
      await SplashScreen.hideAsync();    
    }
  }, [appIsReady]);

  if (!appIsReady) {
    return null;
  }

  return (
    <Tab.Navigator
      screenOptions={({ route, focused }) => ({
        tabBarActiveTintColor: "#FFF",
        tabBarInactiveTintColor: "#5F6571",
        tabBarShowLabel: true,
        headerShown: false,
        headerTitleAlign: "center",
        tabBarStyle: {
          borderTopWidth: 0,
          backgroundColor: '#212429',
          elevation: 20,
          height: 60,
          paddingBottom: 10,
          paddingTop: 5,
          fontFamily: ''
        },
      })}
    >
      <Tab.Screen
        name="Les directs"
        component={LiveScreen}
        initialParams={{ params_user: route.params.user[0] }}
        options={{
          tabBarIcon: ({ focused }) => {
            return (
              <Image
                source={require("../assets/public/live.png")}
                resizeMode="contain"
                style={{
                  width: focused ? 25 : 20,
                  height: focused ? 30 : 25,
                  tintColor: focused ? "#fff" : "#5F6571",
                }}
              />
            );
          },
          headerStyle: {
            backgroundColor: "#fff",
          },
          headerTitleStyle: {
            fontFamily: "Outfit_700Bold",
            color: "#FFF",
          },
          tabBarLabelStyle: {
            fontFamily: "Outfit_700Bold",
          },
        }}
      />

      <Tab.Screen
        name="Tarification"
        component={TarifScreen}
        initialParams={{ params_user: route.params.user[0] }}
        options={{
          tabBarIcon: ({ focused }) => {
            return (
              <Image
                source={require("../assets/public/price-tag.png")}
                resizeMode="contain"
                style={{
                  width: focused ? 25 : 20,
                  height: focused ? 30 : 25,
                  tintColor: focused ? "#fff" : "#5F6571",
                }}
              />
            );
          },
          headerStyle: {
            backgroundColor: "#fff",
          },
          headerTitleStyle: {
            fontFamily: "Outfit_700Bold",
            color: "#FFF",
          },
          tabBarLabelStyle: {
            fontFamily: "Outfit_700Bold",
          },
        }}
      />

      <Tab.Screen
        name="compte"
        component={CompteScreen}
        initialParams={{ params_user: route.params.user[0] }}
        options={{
          tabBarIcon: ({ focused }) => {
            return (
              <Image
                source={require("../assets/public/account.png")}
                resizeMode="contain"
                style={{
                  width: focused ? 25 : 20,
                  height: focused ? 30 : 25,
                  tintColor: focused ? "#fff" : "#5F6571",
                }}
              />
            );
          },
          headerStyle: {
            backgroundColor: "#df1085",
          },
          headerTitleStyle: {
            fontFamily: "Outfit_700Bold",
            color: "#FFF",
          },
          tabBarLabelStyle: {
            fontFamily: "Outfit_700Bold",
          },
        }}
      />
    </Tab.Navigator>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: "#FFF",
    justifyContent: "center",
    alignItems: "center",
    width: "100%",
    height: "100%",
    paddingHorizontal: 5,
  },
});
