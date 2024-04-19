// Affichage resultat aleatoire: SELECT * FROM `tb_user` ORDER BY rand()

import React, { useCallback, useEffect, useState } from "react";

import { StyleSheet } from "react-native";

import { Entypo, AntDesign, FontAwesome5 } from "@expo/vector-icons";
import * as SplashScreen from "expo-splash-screen";
import * as Font from "expo-font";

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

import { NavigationContainer } from "@react-navigation/native";
import { createNativeStackNavigator } from "@react-navigation/native-stack";

import LoginScreen from "./pages/Login";
import SignupScreen from "./pages/Signup";
import HomeScreen from "./pages/Home";
import LiveScreen from "./pages/live-detail";
import ProfilScreen from "./pages/Profil";

const Stack = createNativeStackNavigator();

export default function App() {
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
        await SplashScreen.preventAutoHideAsync();
        await Font.loadAsync(Entypo.font);
        await new Promise((resolve) => setTimeout(resolve, 200));
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
    <NavigationContainer>
      <Stack.Navigator>

        <Stack.Screen
          name="login"
          component={LoginScreen}
          options={({ navigation }) => ({
            title: "LOGIN",
            headerStyle: { backgroundColor: "#df1085" },
            headerShown: false,
            headerTitleAlign: "center",
            headerTintColor: "#ffffff",
            headerTitleStyle: {
              fontWeight: "normal",
              fontFamily: "Outfit_400Regular",
              fontSize: 15,
            },
          })}
        />

        <Stack.Screen
          name="signup"
          component={SignupScreen}
          options={({ navigation }) => ({
            title: "S'inscrire",
            headerStyle: { backgroundColor: "#df1085" },
            headerShown: false,
            headerTitleAlign: "center",
            headerTintColor: "#ffffff",
            headerTitleStyle: {
              fontWeight: "normal",
              fontFamily: "Outfit_400Regular",
              fontSize: 15,
            },
          })}
        />
        
        <Stack.Screen
          name="home"
          component={HomeScreen}
          options={({ navigation }) => ({
            title: "Nos directs",
            headerStyle: { backgroundColor: "#df1085" },
            headerShown: false,
            headerTitleAlign: "center",
            headerTintColor: "#ffffff",
            headerTitleStyle: {
              fontWeight: "normal",
              fontFamily: "Outfit_400Regular",
              fontSize: 15,
            },
          })}
        />
        
        <Stack.Screen
          name="live"
          component={LiveScreen}
          options={({ navigation }) => ({
            title: "Détail du live",
            headerStyle: { backgroundColor: "#df1085" },
            headerShown: false,
            headerTitleAlign: "center",
            headerTintColor: "#ffffff",
            headerTitleStyle: {
              fontWeight: "normal",
              fontFamily: "Outfit_400Regular",
              fontSize: 15,
            },
          })}
        />
        
        <Stack.Screen
          name="profil"
          component={ProfilScreen}
          options={({ navigation }) => ({
            title: "Mon profil",
            headerStyle: { backgroundColor: "#df1085" },
            headerShown: false,
            headerTitleAlign: "center",
            headerTintColor: "#ffffff",
            headerTitleStyle: {
              fontWeight: "normal",
              fontFamily: "Outfit_400Regular",
              fontSize: 15,
            },
          })}
        />
        
      </Stack.Navigator>
    </NavigationContainer>
  );
}

const styles = StyleSheet.create({
  userRegister: {
    color: "transparent",
  },
  wallet: {
    fontFamily: "Outfit_400Regular",
    fontSize: 12,
    color: "#cd1212",
  },
});