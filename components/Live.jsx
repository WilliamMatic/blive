import React, { useCallback, useEffect, useState } from "react";

import {
  StyleSheet,
  View,
  SafeAreaView,
  StatusBar,
  Text,
  TextInput,
  TouchableOpacity,
  Alert,
  ActivityIndicator,
  Image,
  FlatList,
} from "react-native";

import {
  Entypo,
  AntDesign,
  FontAwesome5,
  FontAwesome,
  SimpleLineIcons,
  Ionicons,
} from "@expo/vector-icons";
const url = "https://balezi-group.net/blive/admins/assets/astuce/";

// Définition du composant enfant
export default function Live({ navigation, route, live, user }) {
  return (
    <FlatList
      showsHorizontalScrollIndicator={false}
      data={live}
      horizontal
      renderItem={({ item }) => (
        <TouchableOpacity
          style={{
            width: 280,
            height: 200,
            borderColor: "white",
            borderRadius: 5,
            marginTop: 20,
            position: "relative",
            marginRight: 15,
          }}
          onPress={() =>
            navigation.navigate("live", {
              id: item.youtube,
              titre: item.titre,
              description: item.contenue,
              user: user,
            })
          }
        >
          <Image
            style={{
              width: "100%",
              height: "100%",
              resizeMode: "cover",
              borderRadius: 5,
            }}
            source={{ uri: url + "" + item.avatar }}
          />
          <View
            style={{
              width: 35,
              padding: 2,
              borderColor: "white",
              borderRadius: 5,
              backgroundColor: "rgba(255,255,255,0.5)",
              position: "absolute",
              top: 10,
              left: 10,
              flexDirection: "row",
              alignItems: "center",
            }}
          >
            <Text
              style={{
                color: "white",
                textAlign: "center",
                fontSize: 8,
                fontFamily: "Outfit_700Bold",
                backgroundColor: "red",
                width: 30,
                borderRadius: 5,
                marginRight: 5,
              }}
            >
              LIVE
            </Text>
            {/* <Text
              style={{
                color: "black",
                fontFamily: "Outfit_500Medium",
                fontSize: 10,
              }}
            >
              balezi-group
            </Text> */}
          </View>
          <View
            style={{
              width: "100%",
              height: 80,
              paddingHorizontal: 10,
              backgroundColor: "rgba(0,0,0,0.3)",
              position: "absolute",
              left: 0,
              right: 0,
              bottom: 0,
              justifyContent: "center",
            }}
          >
            <Text
              style={{
                color: "white",
                fontFamily: "Outfit_600SemiBold",
                fontSize: 20,
                marginBottom: 5,
              }}
            >
              {item.titre.substring(0, 23) + "..."}
            </Text>
            <Text
              style={{
                color: "white",
                fontFamily: "Outfit_300Light",
                fontSize: 10,
              }}
              numberOfLines={3}
            >
              {item.contenue}
            </Text>
          </View>
        </TouchableOpacity>
      )}
      keyExtractor={(item) => item.id}
      // ListFooterComponent={<BottomFlat />}
    />
  );
}
